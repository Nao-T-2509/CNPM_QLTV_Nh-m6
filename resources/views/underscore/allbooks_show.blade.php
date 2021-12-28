<tr>
	<td><%= obj.book_id %></td>
	<td><%= obj.title %></td>
	<td><%= obj.author %></td>
	<td><%= obj.description %></td>
	<td><%= obj.category %>
	</td>
	<td><a class="btn btn-success"><%= obj.avaliable %></a></td>
	<td><a class="btn btn-inverse"><%= obj.total_books %></a></td>
	<td>
		<div class="btn btn-group">
	        <a href=""><i class="icon-edit"></i></a>
	        <a href=""><i class="icon-trash"></i></a>
	    </div>
	</td>
</tr>