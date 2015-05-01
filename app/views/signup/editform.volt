<div class="uk-width-1-2 uk-container-center uk-text-center">
	<h3>ลงทะเบียนใหม่</h3>
	<form class="uk-panel uk-panel-box uk-form" action="{{ url("signup/update") }}" method="post">
		<div class="uk-form-row">
			<input class="uk-width-1-1 uk-form-large" type="text" name="name" value="{{ user.name }}" placeholder="ชื่อเล่น">
		</div>
		<div class="uk-form-row">
			<input class="uk-width-1-1 uk-form-large" type="text" name="email" value="{{ user.email }}" placeholder="อีเมล์">
		</div>
		<div class="uk-form-row">
			<input class="uk-width-1-1 uk-form-large" type="text" name="firstname" value="{{ user.firstname }}" placeholder="ชื่อ">
		</div>
		<div class="uk-form-row">
			<input class="uk-width-1-1 uk-form-large" type="text" name="lastname" value="{{ user.lastname }}" placeholder="นามสกุล">
		</div>
		<div class="uk-form-row">
			<input class="uk-width-1-1 uk-button uk-button-primary uk-button-large" type="submit" value="บันทึก">
		</div>
		<input type="hidden" name="id" value="{{ user.id }}">
	</form>
</div>