<?php 
    $urlfilenow = 'hello';
?>

<!--ถ้า $urlfilenow เท่ากับ hello ให้แสดง success ถ้าไม่ใช่ ให้แสดง error -->
<?= $urlfilenow=='hello' ? 'successs' : 'error';