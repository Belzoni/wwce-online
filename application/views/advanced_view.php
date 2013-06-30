<?=form_open('advanced/search');?>
			<section class="row-fluid">
				<section class="span3">
	
						<fieldset>
							<legend>
								Search Option
							</legend>
							<label class="checkbox inline">
							  <input type="checkbox" id="inlineCheckbox1" value="option1"> and
							</label>
							<label class="checkbox inline">
							  <input type="checkbox" id="inlineCheckbox2" value="option2"> or
							</label>
						</fieldset>
	
				</section>
				
				<section class="span9">
					
					<?php 
									echo form_fieldset('Basic Search');
							        echo form_label('Find an Intervention');	 
									$data = array(
								              'name'        => 'name',
								              'class'          => 'input-block-level',
								              'value'       => ''
								                );

									   echo form_input($data);
					                   echo form_fieldset_close(); 
					                  ?>
		
				</section>
				
			</section>
			
			<section class="row-fluid">
				<section class="span6">
					
							 <?php 
									echo form_fieldset('Overall Designation');
							        echo form_label('Intervention Effectiveness');	 
										 $options = array(
						                  'selected'  => 'Select one...',
						                  'Effective'    => 'Effective',
						                  'Unproven'   => 'Unproven',
						                  'Iatrogenic' => 'Iatrogenic'); 
						
					                   echo form_dropdown('effective', $options, 'selected');
					                   echo form_fieldset_close(); 
					                  ?>
					
				</section>

				<section class="span6">

							<?php
							echo form_fieldset('Target Population');
							echo form_label('Grade Level Intervention');
                             $options = array(
						                  'selected'  => 'Select one...',
						                  'Elementary'    => 'Elementary',
						                  'Middle School'   => 'Middle School',
						                  'High School' => 'High School'); 
						   
					        echo form_dropdown('target', $options, 'selected');
                            echo form_fieldset_close(); 
                            ?>			  
									
								
				
				 
				</section>
				
			</section>
			
			<section class="row-fluid">

				<section class="span6">
			
						<?php
							echo form_fieldset('Outcome Category');
							echo form_label('Outcome of Intervention');
                             $options = array(
						                  'selected'  => 'Select one...',
						                  'Risk Behavior'    => 'Risk Behavior',
						                  'Competencies'   => 'Pro-Social Competencies',
						                  'School Based outcome' => 'School-Based outcome',
						                  'Emotional' => 'General Social-Emotional'); 
						   
					        echo form_dropdown('outcomes', $options, 'selected');
                            echo form_fieldset_close(); 
                            ?>			  
		        </section>
				
				<section class="span6">	
					
						<?php
							echo form_fieldset('Implementation Strategy');
							echo form_label('Content and Pedagogical Elements');
                             $options = array(
						                  'selected'  => 'Select one...',
						                  'Explicit Chatacter Education Program'    => 'Explicit Chatacter Education Program',
						                  'Social and Emotional Curriculum'   => 'Social and Emotional Curriculum',
						                  'Academic Curriculum Integration' => 'Academic Curriculum Integration',
						                  'Direct Teaching Strategies' => 'Direct Teaching Strategies',
						                  'Interactive Teaching Learning Strategies' => 'Interactive Teaching/Learning Strategies',
						                  'Classroom Behavior Management Strategies'   => 'Classroom/Behavior Management Strategies',
						                  'Modeling Mentoring' => 'Modeling/Mentoring',
						                  'Family Community Participation<s' => 'Family Community Participation',
						                  'Community Service Service Learning' => 'Community Service/Service Learning',
						                  'Profesional Development' => 'Profesional Development'); 
						   
					        echo form_dropdown('strategy', $options, 'selected');
                            echo form_fieldset_close(); 
                            ?>			  
	
						<input type=submit value='Search' class='btn'/>
						
				
				</section>
  <?=form_close();?>
			</section>