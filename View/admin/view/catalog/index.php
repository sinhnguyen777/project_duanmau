

	<h3 class="d-flex justify-content-center m-0 pb-3 text-primary font-weight-bold">Categories ( Danh mục )</h3>
		<div class="form-row align-items-center">
			<div class="col-auto">
				<a href="#" class="btn btn-primary mb-2" onclick="selectAll()">select All</a>
			</div>
			<div class="col-auto">
				<a href="#" class="btn btn-primary mb-2" onclick="UnselectAll()">UnSelect All</a>
			</div>
			<div class="col-auto">
				<a href="index.php?ctrl=catalog&action=addnew" class="btn btn-primary mb-2">Add New</a>
			</div>
			<div class="col-auto">
				<a href="" type="submit" class="btn btn-primary mb-2">Delete</a>
			</div>
		</div>

	<table class="table table-striped mt-2">
		<thead class="thead-dark">
			<tr>
				<th scope="col">Checked</th>
				<th scope="col">id</th>
				<th scope="col">name</th>
				<th scope="col">Edit</th>
				<th scope="col">Delete</th>
				
			</tr>
		</thead>
		<tbody>
			<?php
				foreach ($catalogs as $dm) {
					$id = $dm['id'];
					$name = $dm['name'];
					$linkedit="index.php?ctrl=catalog&action=edit&idedit=".$id;
                    $linkdelete = "index.php?ctrl=catalog&action=index&iddelete=".$id;
					echo '<tr>
							<th scope="row"><input type="checkbox" name="acs" id=""></th>
							<th scope="row">'.$id.'</th> 
							<td>'.$name.'</td>
							<td><a href="'.$linkedit.'" type="button" class="btn btn-primary"><i class="far fa-edit"></i></a></td>
							<td><a href="'.$linkdelete.'" type="button" class="btn btn-primary"><i class="far fa-trash-alt"></i></a></td>
						</tr>';
				}
			?>
			<!-- <tr>
				<th scope="row">1</th>
				<td>Mark</td>
				<td><a href="" type="button" class="btn btn-primary"><i class="far fa-edit"></i></a></td>
				<td><a href="" type="button" class="btn btn-primary"><i class="far fa-trash-alt"></i></a></td>
			</tr> -->
			
		</tbody>
	</table>
</div>

<script type="text/javascript">
    function selectAll(){
        var items=document.getElementsByName('acs');
        for(var i=0; i<items.length; i++){
            if(items[i].type=='checkbox')
                items[i].checked=true;
        }
    }
    function UnselectAll(){
        var items=document.getElementsByName('acs');
        for(var i=0; i<items.length; i++){
            if(items[i].type=='checkbox')
                items[i].checked=false;
        }
    }
</script>
	