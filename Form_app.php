<?php
// IRP Risk Assessment Questions
$questions = [
    "Has your organization prepared an incident response plan?",
    "Are all employees trained to recognize security incidents?",
    "Is there a process for assessing the severity of incidents?",
    "Do you regularly review and update your risk assessments?",
    "Is there a team responsible for incident response and recovery?"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IRP Risk Assessment Form</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        .question { margin-bottom: 20px; }
        .submit-btn { margin-top: 20px; }
    </style>
</head>
<body>
    <h2>IRP Risk Assessment</h2>
    <form method="post" action="">
        <?php foreach ($questions as $idx => $q): ?>
            <div class="question">
                <label><?php echo htmlspecialchars(($idx+1) . ". " . $q); ?></label><br>
                <input type="radio" name="q<?php echo $idx; ?>" value="yes" required> Yes
                <input type="radio" name="q<?php echo $idx; ?>" value="no"> No
            </div>
        <?php endforeach; ?>
        <button type="submit" class="submit-btn">Submit</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "<h3>Assessment Results:</h3><ul>";
        foreach ($questions as $idx => $q) {
            $answer = isset($_POST["q$idx"]) ? htmlspecialchars($_POST["q$idx"]) : "No answer";
            echo "<li>" . htmlspecialchars($q) . " <strong>$answer</strong></li>";
        }
        echo "</ul>";
    }
    ?>