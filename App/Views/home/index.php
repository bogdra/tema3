<?=$this->get_partial('header')?>

<form action="#" method="GET">
    <input type="text" name="first_number" />
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="second_number" />
    <input type="submit" value="=" />
</form>
