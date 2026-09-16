from playwright.sync_api import sync_playwright

with sync_playwright() as p:
    browser = p.chromium.launch(headless=True)
    for width, height in [(390, 844), (1440, 900)]:
        page = browser.new_page(viewport={"width": width, "height": height})
        errors = []
        page.on("console", lambda msg: errors.append(msg.text) if msg.type == "error" else None)
        page.goto("http://127.0.0.1:4173/", wait_until="networkidle")
        assert page.title().startswith("Brújula Digital")
        assert page.locator("img[src='brand-mark.svg']").count() >= 2
        assert page.locator("h1").is_visible()
        assert page.locator("body").evaluate("el => el.scrollWidth <= el.clientWidth")
        page.screenshot(path=f"preview-{width}.png", full_page=True)
        print(f"PASS {width}x{height} | title, SVG, hero, no horizontal overflow | console errors: {len(errors)}")
        page.close()
    browser.close()
