<h1>Tasks</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/mvc_fix/task/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new task</a>
        <tr>
            <th>ID</th>
            <th>Task</th>
            <th>Description</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        foreach ($tasks as $task) {
            echo '<tr>';
            echo "<td>" . $task['id'] . "</td>";
            echo "<td>" . $task['title'] . "</td>";
            echo "<td>" . $task['description'] . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/mvc_fix/task/update/" . $task["id"] . "'><span class='glyphicon glyphicon-edit'></span> Edit</a> <a onclick = \"return confirm('Are you sure want to delete?')\" href='/mvc_fix/task/delete/" . $task["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>