<?php



?>
<br>

<?=$this->render('@backend/views/blocks/image', [
    'form' => $form,
    'model' => $model,
    'image' => $model->plan,
    'name' => 'plan'
])?>