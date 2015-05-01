<table class="uk-table uk-table-hover uk-table-condensed">
	<thead>
		<th>ชื่อ</th>
		<th>นามสกุล</th>
		<th>ชื่อเล่น</th>
		<th>อีเมล์</th>
		<td></td>
	</thead>
	{% for user in users %}
	<tr>
		<td>{{ user.firstname }}</td>
		<td>{{ user.lastname }}</td>
		<td>{{ user.name }}</td>
		<td>{{ user.email }}</td>
		<td>
			<a href="{{ url("signup/editform") }}/{{ user.id }}" class="uk-text-success">
				<i class="uk-icon-edit"></i> แก้ไข</a> | 
			<a href="{{ url("signup/delete") }}/{{ user.id }}" class="uk-text-danger">
				<i class="uk-icon-remove"></i> ลบ</a>
		</td>
	</tr>
	{% endfor %}
</table>