<section class="container_6 clearfix">

	<div class="grid_3">
		<h3>New Members</h3>
		<hr/>
		
		<ul style="margin:0; padding-left: 0; list-style:none;">
		<?php foreach($newest_members as $member): ?>
			<li>
				<a href=<?php echo site_url("member/" . $member->id); ?>>
					<?php echo $member->name; ?>
				</a>
				joined on <?php echo $member->created_at; ?>
			</li>
		<?php endforeach; ?>
		</ul>

	</div>

	<div class="grid_3">
		<h3>Deliquent Gear</h3>
		<hr/>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet massa at lorem molestie egestas. Donec ipsum purus, consequat ac gravida sed, volutpat ut velit.</p>
	</div>

	<div class="grid_6">
		<h3>Gear Out</h3>
		<hr/>

		<table class="datatable paginate sortable full">
			<thead>
				<tr>
					<th>Gear</th>
					<th>Member</th>
					<th>When was it rented?</th>
					<th>How many?</th>
					<th style="width:100px;"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Tent</td>
					<td>Daniel Bostwick</td>
					<td>April 29, 2011</td>
					<td>1</td>
					<td class="ac"><a href="#" class="button button-gray">Check In</a></td>
				</tr>
			</tbody>
		</table>
	</div>

</section>
