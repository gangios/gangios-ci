<!--[if !IE]> START FORMS <![endif]--> 
<div class="box"> 
    <div class="title"> 
        <h2>Forms</h2> 
        <img src="<?php echo resource_url('gfx/title-hide.gif') ?>" class="toggle" alt="" /> 
    </div> 
    <div class="content forms"> 
    
        <div id="status"></div>
    
        <form action="page.html" method="post"> 
            <div class="row"> 
                <label>A small size input:</label> 
                <input type="text" value="" class="small" /> 
            </div> 
            
            <div class="row"> 
                <label>A medium size input:</label> 
                <input type="text" value="" class="medium" /> 
            </div> 
            
            <div class="row"> 
                <label>A big size input:</label> 
                <input type="text" value="" class="big" /> 
            </div> 
            
            <div class="row"> 
                <label>A full size input:</label> 
                <input type="text" value="" /> 
            </div> 
            
            <div class="row"> 
                <label>A selectbox:</label> 
                <select> 
                    <option value="opt1">Option 1</option> 
                    <option value="opt2">Option 2</option> 
                    <option value="opt3">Option 3</option> 
                    <option value="opt4">Option 4</option> 
                    <option value="opt5">Option 5</option> 
                </select> 
            </div> 
            
            <div class="row"> 
                <label>File upload:</label> 
                <input class="file_1" type="file" /> 
            </div> 
            
            <div class="row"> 
                <label>Date:</label> 
                <span class="date">Starting date</span> <input type="text" class="datepicker" /> 
                <span class="date">Ending date</span> <input type="text" class="datepicker" /> 
            </div> 
            
            <div class="row"> 
                <label>A full size textarea:</label> 
                <textarea cols="" rows=""></textarea> 
            </div> 
            
            <div class="row"> 
                <label>A checkbox</label> 
                <input type="checkbox" class="checkbox" checked="checked" name="ckbox" /> <span>Checkbox on</span> 
                <input type="checkbox" class="checkbox" name="ckbox" /> <span>Checkbox off</span> 
            </div> 
            
            <div class="row"> 
                <label>A radiobutton</label> 
                <input type="radio" class="radio" checked="checked" name="question" value="on" /> <span>Radiobutton on</span> 
                <input type="radio" class="radio" name="question" value="off" /> <span>Radiobutton off</span> 
            </div> 
            
            <div class="row-wysiwyg"> 
                <label>A WYSIWYG editor:</label> 
                <textarea id="wysiwyg" cols="" rows=""></textarea> 
            </div> 
            
            <div class="row buttons"> 
                <button type="submit"><span>Button</span></button> 
                <button type="submit"><span>Button medium</span></button> 
                <button type="submit"><span>Button extra large</span></button> 
            </div> 
        </form> 
        
    </div> 
</div> 
<!--[if !IE]> END FORMS <![endif]-->

<script type="text/javascript" src="<?php echo resource_url('js/content/incontent.js') ?>"></script> 