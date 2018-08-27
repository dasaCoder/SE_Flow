<html>
<h2>Add Questions</h2>
<form method="post" action="{{ url('/add_questions') }}">
    {{ csrf_field() }}
    <label for="Title">Title</label>
    <input type="text" id="title" name="title" value=""/>
    <br>
    <label for="question">Question</label>
    <input type="text" id="question" name="question" value=""/>
    <br>
    <label for="description">Description</label>
    <textarea id="username" name="description" value=""/></textarea>
    <br>
    <input type="submit" value="Submit">
</form>
</html>	