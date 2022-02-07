<?php
    
?>

<select name="courses">
    <?php foreach($cursos_lista as $curso_nome): ?>
    <option><?=$curso_nome?></option>
    <?php endforeach?>
</select>