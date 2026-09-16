"""Validate the platform-neutral Brújula Digital diagnostic configuration."""

import json
from pathlib import Path


ROOT = Path(__file__).resolve().parents[1]
CONFIG = ROOT / "content" / "diagnostic-config.json"


def main() -> None:
    data = json.loads(CONFIG.read_text(encoding="utf-8"))
    assert data["schema"] == "brujula-digital.diagnostic/v1"
    questions = data["questions"]
    assert [q["id"] for q in questions] == ["pain", "context", "level"]
    assert all(q["options"] for q in questions)

    categories = set(data["category_copy"])
    mapped = {
        option["category"]
        for option in questions[0]["options"]
        if "category" in option
    }
    assert mapped == categories

    assert data["result_rules"]["max_tools"] == 6
    assert data["result_rules"]["allowed_statuses"] == ["verified"]
    assert data["result_rules"]["affiliate_click_requires"] == [
        "affiliate_approved",
        "policy_reviewed",
    ]
    assert data["privacy"] == {
        "collect_email": False,
        "collect_free_text": False,
        "store_personal_data": False,
    }
    assert data["events"] == [
        "diagnostic_started",
        "diagnostic_answered",
        "diagnostic_result_viewed",
        "tool_recommendation_opened",
        "affiliate_click",
    ]
    print("diagnostic-config: OK")


if __name__ == "__main__":
    main()
