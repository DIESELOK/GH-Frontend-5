<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Анкетные данные</title>
		<link rel="stylesheet" href="styles/style.css" />
	</head>
	<body>
		<div class="wrapper">

			<form method="post">
				<fieldset>
					<legend>Коротко о себе</legend>
					<dl>
						<dt><label for="name" >Имя:</label></dt>

						<dd><input id="name" type="text" name="name" title="Введите ваше имя" tabindex="1" size="40"/></dd>
						
						<dt><label for="surname" value="surname">Фамилия:</label></dt>
						<dd><input id="surname" type="text" name="surname" title="Введите вашу фамилию" tabindex="2" size="40" /></dd>
						
						<dt><label>Пол:</label></dt>
						<dd class="radio_man"><input type="radio" name="radio_gender" value="мужчина" tabindex="3" checked="checked" />Мужчина</dd>

						<dd><input type="radio"	name="radio_gender" value="Женщина" tabindex="4" />Женщина</dd>
						
						<dt><label for="age">Возраст:</label></dt>
						<dd><input id="age" type="number" name="age" title="Введите ваш возвраст" min="16" max="120" tabindex="5" /> лет</dd>
					</dl>
				</fieldset>
				<fieldset>
					<legend>Подробнее о себе</legend>
					<dl>
						<dt class="radio_man_detail"><input id="man" type="radio" name="radio-man-detail" value="Молодой человек" tabindex="6" checked="checked" /></dt>
						<dd><label for="man">Молодой человек</label></dd>
						
						<dt><input id="woman" type="radio" name="radio-man-detail" value="Девушка" tabindex="7" /></dt>
						<dd><label for="man">Девушка</label></dd>
						
						<dt><input id="birth" type="datetime" name="birth" title="Введите дату рождения" tabindex="8" /></dt>
						<dd><label>Дата рождения</label></dd>
						
						<dt><input id="mar_status" type="text" name="mar_status" title="Укажите семейное положение" tabindex="9" /></dt>
						<dd><label for="mar_status">Семейное положение</label></dd>
						
						<dt><input id="soc_status"type="text" name="soc_status" title="Укажите семейное положение" tabindex="10" /></dt>
						<dd><label for="soc_status">Социальный статус</label></dd>
						
						<dt><input id="livingplace"type="text" name="livingplace" title="Укажите местожительство" tabindex="11" /></dt>
						<dd><label for="livingplace">Местожительство</label></dd>
						
						<dt class="chk_relax"><label>Что вы обычно делаете на выходных:</label></dt>
						<dd><input type="checkbox" name="relax[]" value="Сплю" tabindex="12" />Сплю</dd>
						<dd><input type="checkbox" name="relax[]" value="Гуляю с друзьями" tabindex="13" />Гуляю с друзьями</dd>
						<dd><input type="checkbox" name="relax[]" value="Хожу на рыбалку" tabindex="14" />Хожу на рыбалку</dd>
						<dd><input type="checkbox" name="relax[]" value="Играю в Игры" tabindex="15" />Играю в игры</dd>
						
						<dt class="book"><label for="select">Рассказать о формах в книге, посвященной HTML:</label></dt>
						<dd class="select">
							<select id="select" name="select" size="1" tabindex="16">
								<option selected="selected" value="site Frequency">Site Frequency</option>
								<option value="site Frequency 1">Site Frequency 1</option>
							</select>
						</dd>
						
						<dt class="radio_books"><label>Сколько книг вы прочитали за свою жизнь:</label></dt>
						<dd><input type="radio" name="value" value="0-10" tabindex="17"/>0-10</dd>
						<dd><input type="radio" name="value" value="11-20" tabindex="18" />11-20</dd>
						<dd><input type="radio" name="value" value="21-50" tabindex="19" />21-50</dd>
						<dd><input type="radio" name="value" value="50+" tabindex="20" />50+</dd>
						
						<dt class="comments"><label for="text">Ваши комментарии</label></dt>
						<dd class="textarea"><textarea id="text" name="comments" cols="70" rows="10" tabindex="21"></textarea></dd>
						
						<dt class="position"><label for="select_pos">Position</label></dt>
						<dd class="position">
							<select id="select_pos" name="select_pos" size="3" multiple tabindex="22">
								<option value="pos_1">First Position</option>
								<option selected="selected" value="pos_2">Second position</option>
								<option value="pos_3">Third position</option>
							</select>
						</dd>
					</dl>
				</fieldset>
				<fieldset>
					<legend>И в заключение</legend>
					<div class="dis_text"><input type="text" name="dis_text" value="Это поле было введено до вас" size="30" disabled="disabled" /></div>
					<dl>
						<dt class="email"><label for="email">Email:</label></dt>
						<dd class="email_inp"><input id="email" type="email" name="email" size="30" tabindex="23"/></dd>
					</dl>
					
					<p class="spam">Хотите подписаться на самую модную рассылку спама?</p>
					<dl class="category">
						<dt class="sel_category">Виберите категории</dt>
						<dd><input type="checkbox" name="category[]" value="equipment" tabindex="24"/>Оборудование</dd>
						<dd><input type="checkbox" name="category[]" value="how-to cook" tabindex="25"/>Как приготовить обеды</dd>
						<dd><input type="checkbox" name="category[]" value="shara" tabindex="26"/>Заработай миллион за 2 дня!</dd>
						
						<dt class="task">На сколько сложная задача?</dt>
						<dd><input type="radio" name="task" value="Совсем нет" tabindex="27" checked="checked" />Совсем нет</dd>
						<dd><input type="radio" name="task" value="Так себе" tabindex="28" />Так себе</dd>
						<dd><input type="radio" name="task" value="Еле справились" tabindex="29" />Еле справились</dd>						
						
					</dl>
				</fieldset>	
				<div><input type="submit" name="submit" value="Отправить" /></div>
			</form>

            <section class="info">
                <h2>Коротко о себе</h2>
                <?php
 				    $name = ($_POST['name']);
 				    $surname = ($_POST['surname']);
 				    $gender = ($_POST['radio_gender']);
 				    $age = ($_POST['age']);


                    echo "Меня зовут " . $name . " " . $surname . ". " ;
 				    echo "Мне " . $age . " лет " . "</span>";
 				    echo "<span>" . "и я " . $gender . "</span>";

				?>
            </section>
            <section class="full-info">
                <h2>Подробнее о себе</h2>
                <?php
                $gender = $_POST['radio-man-detail'];
                $birthday = $_POST['birth'];
                $relationship = $_POST['mar_status'];
                $soc_status = $_POST['soc_status'];
                $location = $_POST['livingplace'];
                $weekend = $_POST['relax'];
                $books = $_POST['select'];
                $bookscount = $_POST['value'];
                $comments = $_POST['comments'];

 				echo "Я родился " . $birthday . ". ";
 				echo "Я " . $relationship . " и человек, который имееет " . $soc_status . " уровень достатка. ";
 				echo "Город, где я живу называеться  " . $location . ".";
 				echo "На выходных скоре всего я  ";

 			    for($i = 0; $i < count($weekend); $i++){
                    if ($i == count($weekend)-1) {
                        echo(mb_strtolower($weekend[$i], 'UTF-8') . " ");
                    } else {
                        echo(mb_strtolower($weekend[$i], 'UTF-8') . ", ");
                    }
                }
 			    echo ". ";
 			    echo "Мне очень понравилася книга о HTML, которая называеться  " . $books . ". ";
 			    echo "Всего я прочитал около " . $bookscount. " книг" . ". ";
 			    echo "Когда прочитаете и вы, оставьте свой коммент";
 			    echo "<q>" . $comments . "</q>. ";

 				?>
            </section>
            <section class="endstory">
                <h2>И в завершение</h2>
                <?php
                $email = $_POST['email'];
                $category = $_POST['category'];
                $radio_gender_more = $_POST['radio_gender_more'];

 				echo "Пишите письма на адресс " . $email . " . ";
                echo "Тему письма вы выбрали:  ";
 				    for($i = 0; $i < count($category); $i++) {
                        if ($i == count($category)-1) {
                            echo("\"" . mb_strtolower($category[$i], 'UTF-8') . "\" ");
 				    	} else {
                            echo("\"" . mb_strtolower($category[$i], 'UTF-8') . "\", ");
 				    	}
 				    }
 				?>
            </section>
		</div>
	</body>
</html>
