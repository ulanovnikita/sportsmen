<!DOCTYPE html>
<html>
<head>
    <title>Определение этапа тренировки</title>
</head>
<body>
    <h2>Введите ваш возраст:</h2>
    <form method="post" action="">
        <input type="text" name="age" placeholder="Возраст">
        <input type="submit" name="submit" value="Определить">
    </form>

    <?php
    
    if(isset($_POST['submit'])) {
        
        $age = intval($_POST['age']); 

        
        if ($age >= 18 && $age <= 25) {
            echo "<p>Вы находитесь на начальном этапе тренировок.</p>";
        } elseif ($age >= 26 && $age <= 40) {
            echo "<p>Вы находитесь на среднем уровне тренировок.</p>";
        } elseif ($age > 40) {
            echo "<p>Вы профессионал в своем деле.</p>";
        } else {
            echo "<p>Вы слишком молоды для тренировок.</p>";
        }
    }
    ?>
</body>
</html>
