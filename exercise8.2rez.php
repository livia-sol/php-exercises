    <!DOCTYPE html>
    <html>
    <head>
        <title>Exercise 8.2</title>
    </head>
    <body style="margin-left: 20px">
        <?php 
    /*Exercise 8.2

    From age 0 to 21 display the bellow

    If you are 1 you are a baby

    If you are between 1 and 3 you are a toddler

    If you are between 3 and 5 you are a preschooler

    If you are between 5 and 12 you are a grade-schooler

    If you are between 12 and 18 you are a teenager

    If you are between 18 and 21 you are an young adult

    Please solve this using and iteration from 0 to 21 if, elseif and else. 
    Pay attention that you should display the same statement once for if-elseif-else and once for switch.
    */
    ini_set('display_errors', 1);
    error_reporting(E_ALL);


    $baby = $toddler = $preschooler = $grade_schooler = $teenager = $young_adult= true;
    $x = 0;
    for ($i = 0; $i <= 21; $i++){
        if ($i <= 1 AND $baby){
            $baby = false;
            echo 'If you are 1 you are a baby<br>';
        }
        elseif ($i > 1 AND $i <= 3 AND $toddler)
        {
            $toddler = false;
            echo 'If you are between 1 and 3 you are a toddler<br>';
        }
        elseif ($i > 3 AND $i <= 5 AND $preschooler)
        {
            $preschooler = false;
            echo 'If you are between 3 and 5 you are a preschooler<br>';
        }
        elseif ($i > 5 AND $i <= 12 AND $grade_schooler)
        {
            $grade_schooler = false;
            echo 'If you are between 5 and 12 you are a grade - schooler<br>';
        }
        elseif ($i > 12 AND $i <= 18 AND $teenager)
        {
            $teenager = false;
            echo 'If you are between 12 and 18 you are a teenager<br>';
        }
        elseif ($i > 18 AND $i <= 21 AND $young_adult)
        {
            $young_adult = false;
            echo 'If you are between 18 and 21 you are an young adult<br>';
        }
    }

    ?>
</body>
</html>