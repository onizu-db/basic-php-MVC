<form action="index.php" method="POST">
    <input type="hidden" name="addTask" value="1">
    <input type="text" name="taskDescription">
    <select name="taskPriority">
        <option value="1">1-Critical</option> 
        <option value="2">2-High</option> 
        <option value="3" selected>3-Moderate</option> 
        <option value="4">4-Low</option> 
    </select>
    <button type="submit">
        Add Task
    </button>
</form>
