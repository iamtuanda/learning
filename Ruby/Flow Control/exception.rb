# retry_times = 1
# begin
# 	file = open("not_exist_file.txt")
# 	if file
# 		puts "File open successfully"
# 		file.close
# 	end
# rescue => e
# 	if retry_times < 4
# 		puts "Trying open file " + retry_times.to_s + " times"
# 		retry_times += 1
# 		retry
# 	else
# 		puts "File not found!"
# 		puts e
# 	end
# else
# 	puts "else - run if not any exceptions"
# ensure
# 	puts "ensure - always run despite any exceptions"
# end


tree_name = "pine"
$car_name = "Peugeot"
@sea_name = "Black sea"
@@species = "Cat"
 
p local_variables
p global_variables.include? :$car_name
p self.instance_variables
p Object.class_variables