<div class="row">
	<center><h4>Edit Recipes</h4></center><br>
        
        <center>
                <table border="1" cellpadding="5px">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Ingredients</th>
                    </tr>
                {recipes}
                    <tr align="center">
                    <td><a href="/editrecipe/{code}">{name}<a></td>
                        <td>{description}</td>
                        <td>{ingredients}</td>
                    </tr>
                {/recipes}
                </table>
        </center>
        
        
</div>