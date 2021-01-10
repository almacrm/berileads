		<div id="popup" class="popup">
			<div class="popup__body">
				<div class="popup__content auth">
					<a href="#header" class="popup__close close-popup">X</a>
				  	<div class="tabs">
						<nav class="tabs__items">
							<a href="#tab_01" class="tabs__item"><span>Регистрация</span></a>
							<a href="#tab_02" class="tabs__item"><span>Вход</span></a>
		
						</nav> 
					<div class="tabs__body">
						<div id="tab_01" class="tabs__block">
							<form action="validation-form/check.php" method="post">
						   <div class="row_btn">
									            <div class="col-50-btn">          
									                <input type="text" id="login" name="login" placeholder="Ваш логин:">
									            </div>
									            <div class="col-50-btn">          
									                <input type="text" id="email" name="email" placeholder="Ваш email:">
									            </div>
								            </div>
								           
								            <div class="row_btn">
									            <div class="col-50-btn">          
									                <input type="text" id="pass" name="pass" placeholder="Введите ваш пароль:">
									            </div>
									          <!--   <div class="col-50-btn">          
									                <input type="text" id="passtwo" name="passtwo" placeholder="Повторите ваш пароль:">
									            </div> -->
								            </div>
  									
											 <button class="form_btn" type="submit">Регистрация</button>
											 </form>	
											</div>
											<div id="tab_02" class="tabs__block">
											 <form action="validation-form/auth.php" method="post">
											<div class="col-50-btn">          
									                <input type="text" id="login" name="login" placeholder="Ваш логин">
									            </div>
									            <div class="col-50-btn">          
									                <input type="text" id="pass" name="pass" placeholder="Введите ваш пароль:">
									            </div>

 											<button class="form_btn" type="submit">Отправить</button>
			  							</form>	
						 		</div>			
							</div>
						</div>
       				 </div>
				</div>
			</div>	