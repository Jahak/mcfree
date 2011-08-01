<?php $this->display('header', array('title' => 'Чат | Написать')) ?>

<div class="title"><img src="<?php echo URL ?>views/<?php echo THEME ?>/img/titl.gif" class="ico" alt="" />Написать</div>

<?php if($error): ?>
<div class="error">
<?php echo $error ?>
</div>
<?php endif ?>

<form action="<?php echo a_url('chat/say', 'room_id='. $room['room_id']) ?>" method="post">
<div class="menu">
Сообщение:<br />
<textarea name="message" rows="5" cols="20"><?php echo @$_POST['message'] ?></textarea><br />
<input type="submit" name="submit" value="Отправить" />
</div>
</form>

<div class="block">
<a href="<?php echo a_url('chat/in_room', 'room_id='. $room['room_id']) ?>"><?php echo $room['name'] ?></a><br />
<a href="<?php echo a_url('chat') ?>">В прихожую</a><br />
<a href="<?php echo URL ?>">На главную</a><br />
</div>

<?php $this->display('footer') ?>