<!DOCTYPE html>
<html >
<head>
	<script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.js"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.13.2.js"></script>
	<script src="js/myApp.js"></script>
</head>
<body ng-app="myApp" ng-controller="myController">
	<script type="text/ng-template" id="candidateModal.html">
			<div class="modal-header">
				<h3 class="modal-title">
					Edit Candidate 
					<div class="btn-group pull-right">
						<button class="btn btn-primary" ng-click="ok()">Ok</button>
						<button class="btn btn-primary" ng-click="cancel()">Cancel</button>
					</div>
				</h3>
			</div>
			<div class="modal-body">
				<form role="form">
					<div class="form-group">
						<label>fName</label>
						<input type="text" class="form-control" ng-model="candidate.fName">
					</div>
					<div class="form-group">
						<label>nickName</label>
						<input type="text" class="form-control" ng-model="candidate.nickName">
					</div>
					<div class="form-group">
						<label>mName</label>
						<input type="text" class="form-control" ng-model="candidate.mName">
					</div>
					<div class="form-group">
						<label>lName</label>
						<input type="text" class="form-control" ng-model="candidate.lName">
					</div>
					<div class="form-group">
						<label>party</label>
						<input type="text" class="form-control" ng-model="candidate.party">
					</div>
					<div class="form-group">
						<label>occupation</label>
						<input type="text" class="form-control" ng-model="candidate.occupation">
					</div>
					<div class="form-group">
						<label>birthdate</label>
						<input type="text" class="form-control" ng-model="candidate.birthdate">
					</div>
					<div class="form-group">
						<label>spouseFName</label>
						<input type="text" class="form-control" ng-model="candidate.spouseFName">
					</div>
					<div class="form-group">
						<label>spouseMName</label>
						<input type="text" class="form-control" ng-model="candidate.spouseMName">
					</div>
					<div class="form-group">
						<label>spouseLName</label>
						<input type="text" class="form-control" ng-model="candidate.spouseLName">
					</div>
					<div class="form-group">
						<label>bio</label>
						<input type="text" class="form-control" ng-model="candidate.bio">
					</div>
					<div class="form-group">
						<label>twitter</label>
						<input type="text" class="form-control" ng-model="candidate.twitter">
					</div>
					<div class="form-group">
						<label>url</label>
						<input type="text" class="form-control" ng-model="candidate.url">
					</div>
					<div class="form-group">
						<label>facebook</label>
						<input type="text" class="form-control" ng-model="candidate.facebook">
					</div>
					<div class="form-group">
						<label>bioGuide</label>
						<input type="text" class="form-control" ng-model="candidate.bioGuide">
					</div>
					<div class="form-group">
						<label>image</label>
						<input type="text" class="form-control" ng-model="candidate.image">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-default" ng-click="submit()">Submit</button>
					</div>
				</form>
			<div class="modal-footer">
				<div class="btn-group pull-right">
						<button class="btn btn-primary" ng-click="ok()">Ok</button>
						<button class="btn btn-primary" ng-click="cancel()">Cancel</button>
					</div>
			</div>
		</script>

	<div class="container-fluid">
		<div class="jumbotron">
			<h1>Candidates Database</h1>
			<p>Add and remove candidate info from database.</p>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<h2>Add Candidate</h2>
				<form role="form">
					<div class="form-group">
						<label>fName</label>
						<input type="text" class="form-control" ng-model="candidate.fName" ng-init="candidate.fName=''">
					</div>
					<div class="form-group">
						<label>nickName</label>
						<input type="text" class="form-control" ng-model="candidate.nickName" ng-init="candidate.nickName=''">
					</div>
					<div class="form-group">
						<label>mName</label>
						<input type="text" class="form-control" ng-model="candidate.mName" ng-init="candidate.mName=''">
					</div>
					<div class="form-group">
						<label>lName</label>
						<input type="text" class="form-control" ng-model="candidate.lName" ng-init="candidate.lName=''">
					</div>
					<div class="form-group">
						<label>party</label>
						<input type="text" class="form-control" ng-model="candidate.party" ng-init="candidate.party=''">
					</div>
					<div class="form-group">
						<label>occupation</label>
						<input type="text" class="form-control" ng-model="candidate.occupation" ng-init="candidate.occupation=''">
					</div>
					<div class="form-group">
						<label>birthdate</label>
						<input type="text" class="form-control" ng-model="candidate.birthdate" ng-init="candidate.birthdate=''">
					</div>
					<div class="form-group">
						<label>spouseFName</label>
						<input type="text" class="form-control" ng-model="candidate.spouseFName" ng-init="candidate.spouseFName=''">
					</div>
					<div class="form-group">
						<label>spouseMName</label>
						<input type="text" class="form-control" ng-model="candidate.spouseMName" ng-init="candidate.spouseMName=''">
					</div>
					<div class="form-group">
						<label>spouseLName</label>
						<input type="text" class="form-control" ng-model="candidate.spouseLName" ng-init="candidate.spouseLName=''">
					</div>
					<div class="form-group">
						<label>bio</label>
						<input type="text" class="form-control" ng-model="candidate.bio" ng-init="candidate.bio=''">
					</div>
					<div class="form-group">
						<label>twitter</label>
						<input type="text" class="form-control" ng-model="candidate.twitter" ng-init="candidate.twitter=''">
					</div>
					<div class="form-group">
						<label>url</label>
						<input type="text" class="form-control" ng-model="candidate.url" ng-init="candidate.url=''">
					</div>
					<div class="form-group">
						<label>facebook</label>
						<input type="text" class="form-control" ng-model="candidate.facebook" ng-init="candidate.facebook=''">
					</div>
					<div class="form-group">
						<label>bioGuide</label>
						<input type="text" class="form-control" ng-model="candidate.bioGuide" ng-init="candidate.bioGuide=''">
					</div>
					<div class="form-group">
						<label>image</label>
						<input type="text" class="form-control" ng-model="candidate.image" ng-init="candidate.image=''">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-default" ng-click="submit()">Submit</button>
					</div>
				</form>
			</div>
			<div class="col-sm-6">

				<h2>Status</h2>
				<div ng-bind="names">Bananas</div>

			</div>
		</div>

		<table class="table table-hover">
			<thead>
				<tr>
					<th>fName</th>
					<th>nickName</th>
					<th>mName</th>
					<th>lName</th>
					<th>party</th>
					<th>occupation</th>
					<th>birthdate</th>
					<th>spouseFName</th>
					<th>spouseMName</th>
					<th>spouseLName</th>
					<th>bio</th>
					<th>twitter</th>
					<th>url</th>
					<th>facebook</th>
					<th>bioGuide</th>
					<th>image</th>
				</tr>
				</thead>
				<tr ng-repeat="x in candidates">
					<td>{{ x.fName}}</td>
					<td>{{ x.nickName}}</td>
					<td>{{ x.mName }}</td>
					<td>{{ x.lName }}</td>
					<td>{{ x.party }}</td>
					<td>{{ x.occupation }}</td>
					<td>{{ x.birthdate }}</td>
					<td>{{ x.spouseFName }}</td>
					<td>{{ x.spouseMName }}</td>
					<td>{{ x.spouseLName }}</td>
					<td>{{ x.bio }}</td>
					<td>{{ x.twitter }}</td>
					<td>{{ x.url }}</td>
					<td>{{ x.facebook }}</td>
					<td>{{ x.bioGuide }}</td>
					<td>{{ x.image }}</td>
					<td>
						<button type="button" class="btn btn-info" ng-click="edit(x.ID,x)">Edit</button>
					</td>
					<td>
						<button type="button" class="btn btn-danger" ng-click="delete(x.ID)">Delete</button>
					</td>
					
				</tr>
			</table>



		</div>

	</body>
	</html>
