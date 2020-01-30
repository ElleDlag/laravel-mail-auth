<form action="{{ route ('tester.store') }}" method="post">
    @csrf
    @method('post')

    <label for="name">NAME</label>
    <input type="text" id="name" name='name'>
    <br>

    <label for="sex">SEX</label>
    <select name="sex" id="sex">
        <option value="male">MALE</option>
        <option value="male">FEMALE</option>
    </select>
    <br>

    <label for="age">AGE</label>
    <input type="text" name="age" id=age>
    <input type="submit" value="INVIA MAIL">
</form>