	<form action='search_information.php' method='POST' style='float:right; margin-right:20px;'>
	<select>
    <option value="all" name="all">All</option>
    <option value="name" name="name">Name</option>
    <option value="case_title" name="case_title">Case Title</option>
    <option value="case_number" name="case_number">Case #</option>
    <option value="area" name="area">Area</option>
    <option value="owner" name="owner">Owner</option>
    <option value="title_number" name="title_number">Title #</option>
    </select>
	<input type='submit' name = 'submit_one' value='search' style='float:right;'>&nbsp;
	<input type='search' name='search' placeholder='Enter keyword' style='float:right;'>
    <table class='table table-striped table-hover' style='float:left;'>
	<th>Case ID :</th><th>Case Title</th><th>Case Number</th><th>Title Number</th><th>Land Area</th><th>land Owner</th><th>adjudicator</th><th>Status</th><th>timestamp</th><th colspan='2'>Action</th>
    <tr>