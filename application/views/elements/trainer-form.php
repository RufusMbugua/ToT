<form name="trainerForm" method="post" class="registration-form" action="<?php echo base_url().'c_trainers/add'?>">
	<h3>Trainer Form</h3>

	<a class="tab-title a awesome medium">Personal Info.</a>
	<a class="tab-title b awesome medium">Background Info.</a>

	<section class="tab a">
		<section class="fields">
			<input type="text" name="firstName" placeholder="First Name" required>
			<input type="text" name="otherNames" placeholder="Other Names" required>
			<input type="text" name="dateOfBirth" placeholder="Date Of Birth" required>
			<input type="text" name="email" placeholder="Email Address" required>
			<input type="text" name="telephone" placeholder="Telephone Number" required>
			<input type="text" name="startDate" placeholder="Start Date" required>
			<input type="text" name="finishDate" placeholder="Finish Date" required>

		</section>
	</section>
	<section class="tab b">
		<section class="fields">
			<label for="NameOfSchool">Name Of School </label>
			<input  type="text" name="nameOfSchool" placeholder="Name Of School" required>
			<label for="Residence">Residence </label>
			<input  type="text" name="residence" placeholder="Residence" required>
			<label for="NameOfcourse">Name Of Course </label>
			<input  type="text" name="nameOfcourse" placeholder="Name Of Course" required>
			<label for="YearOfStudy">Year Of Study </label>
			<input  type="text" name="yearOfStudy" placeholder="Year Of Study" required>

		</section>
	</section>
	<input type="submit" value="Submit">

</form>