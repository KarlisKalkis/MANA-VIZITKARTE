<?php
class MyProject{
    public $projectname = 'sandbox';
    public $version = '1234';
    public $coll = ['es', 'tu'];
}

// Izveidota clase
$project = new MyProject();

//Seit ir printesana
echo $project-> projectName;
echo $project->version;


public function hello(){
    echo $this-> projectName . ' - ' . $this -> version;
}

?>