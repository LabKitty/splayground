<h2>Add New Hero</h2>
<div  style="border-bottom: 1px solid; margin: 10px 0px 10px 0px;"></div>
<form class="form-inline" method="post" role="form">
    <div class="form-group">
        <input class="form-control" type="text" placeholder="Name" name="data[hero_title]"/>
    </div>
    <br>
    <div class="form-group">
        <input class="form-control" type="text" placeholder="Caption" name="data[hero_caption]"/>
    </div>
    <br>
    <textarea name="data[hero_text]" placeholder="Information" style="width: 500px; height:150px; margin: 10px 0px 10px 0px; border-radius: 5px;" ></textarea>
    <br>
    <textarea name="data[hero_desc]" placeholder="Description" style="width: 500px; height:150px; margin: 10px 0px 10px 0px; border-radius: 5px;" ></textarea>
    <br>
    <div class="form-group">
        <input class="form-control" type="text" placeholder="URL picture link" name="data[hero_pic]" style="margin: 0px 0px 10px 0px"/>
    </div>
    <br>

    <div class="form-group">
        <select class="form-control" name="data[hero_attribut]">
            <option value="1">Radiant Strength</option>
            <option value="4">Radiant Agility</option>
            <option value="2">Radiant Intelligence</option>
            <option value="5">Dire Strength</option>
            <option value="3">Dire Agility</option>
            <option value="6">Dire Intelligence</option>
        </select>
    </div>
    <br>
    <div class="form-group">
        <button class="btn btn-default" type="submit">Add</button>
    </div>
</form>
