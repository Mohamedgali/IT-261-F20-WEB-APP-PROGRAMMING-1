<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ) ?>" method="POST">  <!-- the form action is pointing to the page we are on -->
    <!-- htmlspecialchars function makes page secure -->

    <fieldset>

        <label class="label-input">
            First Name
            <input type="text" name="firstName" value="<?php 
                if( isset($_POST['firstName']) ) echo htmlspecialchars( $_POST['firstName'] ); ?>"><br />  <!-- if isset post name is set, then show the post name -->
            <span><?php echo $firstNameErr; ?></span>
        </label>

        <label class="label-input">
            Last Name
            <input type="text" name="lastName" value="<?php 
                if( isset($_POST['lastName']) ) echo htmlspecialchars( $_POST['lastName'] ); ?>"><br />
            <span><?php echo $lastNameErr; ?></span>
        </label>

        <label class="label-input">
            Email
            <input type="email" name="email" value="<?php 
                if( isset($_POST['email']) ) echo htmlspecialchars( $_POST['email'] ); ?>"><br />
            <span><?php echo $emailErr; ?></span>
        </label>

        <label class="label-input">
            Phone
            <input type="tel" name="tel" placeholder="xxx-xxx-xxxx" value="<?php 
                if( isset($_POST['tel']) ) echo htmlspecialchars( $_POST['tel'] ); ?>"><br />
            <span><?php echo $telErr; ?></span>
        </label>
        
        <label>How did you hear about us?</label>
                
            <select name="medium">
                    <option value=""
                <?php if(isset($_POST['medium']) && $_POST == 'NULL') {
                echo 'selected = "unselected"';}?>>Select one</option>
                    
                    <option value="Facebook"
                <?php if(isset($_POST['medium']) && $_POST['medium'] == 'Facebook') {
                echo 'selected = "selected"';}?>>Facebook</option> 
                
                <option value="Instagram"
                <?php if(isset($_POST['medium']) && $_POST['medium'] == 'Instagram') {
                echo 'selected = "selected"';}?>>Instagram</option> 
                
                <option value="Pinterest"
                <?php if(isset($_POST['medium']) && $_POST['medium'] == 'Pinterest') {
                echo 'selected = "selected"';}?>>Pinterest</option> 
                
                <option value="Search engines"
                <?php if(isset($_POST['medium']) && $_POST['medium'] == 'Search engines') {
                echo 'selected = "selected"';}?>>Search engines</option>
                
                <option value="Others"
                <?php if(isset($_POST['medium']) && $_POST['medium'] == 'Others') {
                echo 'selected = "selected"';}?>>Others</option>
                
            </select>
        
        <span><?php echo $medErr; ?></span>

        <div class="form-box">
            <label>Do you like to travel?</label>
            <ul>
                <li><input type="radio" name="returnCust" value="yes"
                    <?php if( isset($_POST['returnCust']) && $_POST['returnCust'] == 'yes' ) echo 'checked="checked"'; ?>> Yes</li>

                <li><input type="radio" name="returnCust" value="no"
                    <?php if( isset($_POST['returnCust']) && $_POST['returnCust'] == 'no' ) echo 'checked="checked"'; ?>> No</li>
            </ul>
            <span><?php echo $returnCustErr; ?></span>                    
        </div>

        <div class="form-box">
            <label>What State Do You Actually Belong In?</label>
            <ul>
                <li><input type="checkbox" name="albums[]" value="Florida"
                    <?php if( isset($_POST['albums']) && $_POST['albums'] == 'Florida' ) echo 'checked="checked"'; ?>> Florida</li>

                <li><input type="checkbox" name="albums[]" value="New York"
                    <?php if( isset($_POST['albums']) && $_POST['albums'] == 'New York' ) echo 'checked="checked"'; ?>> New York</li>

                <li><input type="checkbox" name="albums[]" value="Washington"
                    <?php if( isset($_POST['albums']) && $_POST['albums'] == 'Washington' ) echo 'checked="checked"'; ?>> Washington</li>

                <li><input type="checkbox" name="albums[]" value="Texas"
                    <?php if( isset($_POST['albums']) && $_POST['albums'] == 'Texas' ) echo 'checked="checked"'; ?>> Texas</li>

                <li><input type="checkbox" name="albums[]" value="Illinois"
                    <?php if( isset($_POST['albums']) && $_POST['albums'] == 'requiembryo' ) echo 'checked="checked"'; ?>> Illinois</li>
                
                
            </ul>
            <span><?php echo $albumsErr; ?></span>                                        
        </div>
        


        <label class="label-input">
            Tell us why!
            <textarea name="comments"><?php if( isset($_POST['comments']) ) echo htmlspecialchars( $_POST['comments'] ); ?></textarea>
            <span><?php echo $commentsErr; ?></span>
        </label>

        <label class="label-input">
            <input type="radio" name="privacy" value="<?php 
                    if( isset($_POST['privacy']) ) echo htmlspecialchars( $_POST['privacy'] ); ?>"> I agree to your privacy policy
            <span><?php echo $privacyErr; ?></span>                    
        </label>

        <input type="submit" value="Send" />
        
        <p class="reset"><a href="">Reset Form</a></p>
        

    </fieldset>

</form> 



