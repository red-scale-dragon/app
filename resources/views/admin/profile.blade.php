<div id="dragon-profile" class="card card-full-width">
	<h3>Extra profile information</h3>

    <table class="form-table">
    <tr>
        <th><label for="name_of_dragon">Name of Dragon</label></th>
        <td>
            <input type="text" name="name_of_dragon" id="name_of_dragon" value="{{ $name_of_dragon }}" class="regular-text" /><br />
            <span class="description">Name your dragon.</span>
        </td>
    </tr>
        @admin
        <tr>
        	<th><label for="admin_notes">Admin Notes</label></th>
        	<td>
        		<textarea name="admin_notes" id="admin_notes" class="regular-text">{{ $admin_notes }}</textarea>
	        </td>
	    </tr>
        @endadmin
    </table>
</div>
