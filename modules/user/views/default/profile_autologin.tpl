<?php $this->display('header', array('sub_title' => 'Автологин')) ?>

<div class="title"><img src="<?php echo URL ?>views/<?php echo THEME ?>/img/titl.gif" class="ico" alt="" /><b>Автологин</b></div>
<div class="menu">
Чтобы постоянно не вводить ваш логин и пароль при входе просто сохраните закладку с таким адресом:<br />
<br />
<u><?php echo URL ?>user/login?username=<?php echo $user['username'] ?>&amp;password=ваш_пароль</u><br />
<br />
<input name="autologin" type="text" value="<?php echo URL ?>user/login?username=<?php echo $user['username'] ?>&amp;password=ваш_пароль" />
</div>

<div class="block">
<a href="<?php echo a_url(MAIN_MENU) ?>">В кабинет</a><br />
<a href="<?php echo URL ?>">На главную</a>
</div>

<?php $this->display('footer') ?>