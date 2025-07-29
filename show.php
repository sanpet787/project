<?php
// Example risk assessment results array
$risks = [
    [
        "topic" => "Incident Response Plan",
        "explanation" => "Lack of a documented incident response plan can lead to confusion and delays during a security incident.",
        "tools" => ["NIST IRP Guide", "ISO/IEC 27035", "SANS Incident Handler's Handbook"]
    ],
    [
        "topic" => "Employee Training",
        "explanation" => "Untrained employees may not recognize or report security incidents promptly, increasing risk.",
        "tools" => ["Security Awareness Training Platforms", "Phishing Simulation Tools"]
    ],
    [
        "topic" => "Severity Assessment Process",
        "explanation" => "Without a process to assess incident severity, critical threats may not be prioritized correctly.",
        "tools" => ["Risk Assessment Templates", "Incident Management Software"]
    ],
    [
        "topic" => "Regular Risk Review",
        "explanation" => "Failing to review and update risk assessments can leave the organization exposed to new threats.",
        "tools" => ["Automated Risk Assessment Tools", "Compliance Management Systems"]
    ],
    [
        "topic" => "Dedicated Response Team",
        "explanation" => "Without a dedicated team, incident response may be slow or ineffective.",
        "tools" => ["Incident Response Team Playbooks", "Communication Platforms (e.g., Slack, Teams)"]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IRP Risk Assessment Results</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        .risk-list { margin: 0; padding: 0; }
        .risk-item { margin-bottom: 25px; list-style: none; }
        .risk-topic { font-weight: bold; font-size: 1.1em; }
        .tools-list { margin: 5px 0 0 20px; }
    </style>
</head>
<body>
    <h2>IRP Risk Assessment Results</h2>
    <ul class="risk-list">
        <?php foreach ($risks as $risk): ?>
            <li class="risk-item">
                <div class="risk-topic"><?php echo htmlspecialchars($risk['topic']); ?></div>
                <div class="risk-explanation"><?php echo htmlspecialchars($risk['explanation']); ?></div>
                <div class="risk-tools">
                    <span>Suggested Tools:</span>
                    <ul class="tools-list">
                        <?php foreach ($risk['tools'] as $tool): ?>
                            <li><?php echo htmlspecialchars($tool); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
