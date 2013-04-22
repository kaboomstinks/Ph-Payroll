<div style="width:1000px;margin:50px auto auto">
    
    
        <div class="hero-unit">
            <h1>Hello HR :)</h1>
            <p>What will you do?</p>
        </div>
        
        <div><button class="btn btn-primary btn-large" id="addEmployeeButton">Add Employee</button></div>
        
        <div class="modal hide fade" id="employeeModal">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3>Employee Details</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="employeeForm">
                    <div class="control-group">
                        <label class="control-label">First Name:</label>
                        <div class="controls">
                            <input type="text" id="fname">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Middle Name:</label>
                        <div class="controls">
                            <input type="text" id="mname">
                        </div>
                    </div>
                   <div class="control-group">
                        <label class="control-label">Last Name:</label>
                        <div class="controls">
                            <input type="text" id="lname">
                        </div>
                    </div>
                   <div class="control-group">
                        <label class="control-label">SSS:</label>
                        <div class="controls">
                            <input type="text" id="sss">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">TIN:</label>
                        <div class="controls">
                            <input type="text" id="tin">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">PAG-IBIG:</label>
                        <div class="controls">
                            <input type="text" id="pagibig">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">PHILHEALTH:</label>
                        <div class="controls">
                            <input type="text" id="philhealth">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" id="employeeCloseButton">Close</a>
                <a href="#" class="btn btn-primary" id="employeeAddButton">Add</a>
            </div>
        </div>
  
</div>

<script>
    $(document).ready(function(){
        $('#addEmployeeButton').click(function(){
            $('#employeeModal').modal('show');
        });
        
        $('#employeeCloseButton').click(function(){
            $('#employeeModal').modal('hide');    
        });
    });
    
</script>