<html>
<h2>Add Questions</h2>
<form method="post" action="{{ url("add_questions") }}">
    {{ csrf_field() }}
    <label for="Title">Title</label>
    <input type="text" id="first_name" name="first_name" value=""/>
    <br>
    <label for="question">Question</label>
    <input type="text" id="last_name" name="last_name" value=""/>
    <br>
    <label for="description">Description</label>
    <textarea id="username" name="username" value=""/></textarea>
    <br>
    <input type="submit" value="Submit">
</form>
</html>	