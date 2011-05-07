<section class="container_6 clearfix">

    <div class="grid_6">
        <table class="datatable sortable full">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Email Address</th>
                    <th>Notes</th>
                </tr>
            </thead>
            <tbody>
				<?php foreach($members as $member): ?>
                <tr>
                    <td>
						<a href=<?php echo site_url("members/show/" . $member->id); ?>>
							<?php echo $member->name; ?>
						</a>
					</td>
                    <td><?php echo $member->phone; ?></td>
                    <td><?php echo $member->email; ?></td>
                    <td><?php echo $member->notes; ?></td>
                </tr>
				<?php endforeach; ?>
			</tbody>
		</table>
    </div>

</section>
