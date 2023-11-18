
<?php
$number=5;
$number2=10; 
$sum=$number+$number2;
?>
<div class="contenue">
    <h1> premier projets </h1>
     <p class="texte"> la somme de <span class="nb1"><?php echo $number; ?></span>et <span claas="nb1"><?php echo $number2; ?></span>est <span class="sum"><?php echo $sum; ?></span>
</div>

<style>
.contenue{
    border: 3px solid black;
    padding: 20px;
}
h1 {
    border: 2px solid black;
}
.nb1{
    color: blue;
}.nb2{
    color: red;
}.sum {
color: green;
}
</style>
