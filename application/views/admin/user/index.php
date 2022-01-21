



<section>

	<h2>Users</h2>
	<?= anchor('admin/user/edit'),'<i class="icon-plus" ></i> Add a user' ;?>
	<table class="table table-striped">

		<thead>
			<tr>
				<th>Email</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php if (count($users)) : ?>
			<?php foreach ($users as $user): ?>
				<td>
					<?= anchor('admin/user/edit/').$users->id,$user->email   ?>
				</td>
				<td>
					<?= btn_edit('admin/user/edit').$users->id ?>
				</td>
				<td>
					<?= btn_delete('admin/user/delete').$users->id ?>
				</td>

			<?php endforeach;  ?>
			<?php else:   ?>
			<tr>
				<td colspan="3"> We could not find any users .</td>
			</tr>
			<?php endif; ?>
		</tbody>
	</table>
</section>
