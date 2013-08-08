<?php

include_once("bd.php");

$lang_prog = $_POST['lang_prog'];
$experience = $_POST['experience'];
$city = $_POST['city'];
$education = $_POST['education'];
$work_time = $_POST['work_time'];
$pay = $_POST['pay'];
$extra = $_POST['extra'];
$owner = $login;
$rdate = date("d-m-Y в H:i");



echo $lang_prog;

class Node {

    protected $testAttribute;
    protected $links;

    public function __construct($testAttribute) {

        $this->testAttribute = $testAttribute;
        $this->links = array();
    }

    public function addLink($value, $node) {

        $link = new stdClass();
        $link->value = $value;
        $link->node = $node;
        $this->links[count($this->links)] = $link;
        return true;
    }

    public function execute($item) {

        if (key_exists($this->testAttribute, $item)) {
            $value = $item[$this->testAttribute];
            foreach ($this->links as $link) {
                $linkValue = str_replace("x", $value, $link->value);
                eval('$result=(' . $linkValue . ');');
                if ($result) {
                    if ($link->node instanceof Node) {
                        return $link->node->execute($item);
                    } else {
                        return $link->node;
                    }
                }
            }
        }
    }

}

$checkPay = new Node("pay");
$checkPay->addLink("x!='$pay'", 'F');
$checkPay->addLink("x=='$pay'", 'T');

$checkWork = new Node("work_time");
$checkWork->addLink("x!='$work_time'", 'F');
$checkWork->addLink("x=='$work_time'", $checkPay);

$checkEducation = new Node("education");
$checkEducation->addLink("x!='$education'", 'F');
$checkEducation->addLink("x=='$education'", $checkWork);

$checkCity = new Node("city");
$checkCity->addLink("x!='$city'", 'F_city');
$checkCity->addLink("x=='$city'", $checkEducation);

$checkExperience = new Node("experience");
$checkExperience->addLink("x!='$experience'", 'F_experience');
$checkExperience->addLink("x=='$experience'", $checkCity);

$checkLang = new Node("lang_prog");
$checkLang->addLink("x!='$lang_prog'", 'F_lang');
$checkLang->addLink("x=='$lang_prog'", $checkExperience);



$my_query = mysql_query("SELECT * FROM resume ") or die(mysql_error());

while ($row = mysql_fetch_array($my_query)) {
    echo "Языки программирования: ", $row["lang_prog"], "<br />",
    "Опыт: ", $row["experience"], "<br />",
    "Город: ", $row["city"], "<br />",
    "Образование: ", $row['education'], "<br />",
    "Тип занятости: ", $row['work_time'], "<br />",
    "Зарплата: ", $row['pay'], "<br />",
    "Результат: ", $checkLang->execute($row), "<br /> <br />";
}
?>