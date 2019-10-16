class Car
	attr_accessor :name, :price
	def info
		price = "10000$"
		self.price = "500000$"
		
		"#{@name}: #{@price}"
	end
end
lb = Car.new()
lb.name = "Lambo"
puts lb.info



class Vars

@class_ins_var = 10    #class instance variable
@@class_var = 15 #class  variable

def self.class_method
    puts @class_ins_var
    puts @@class_var
end
end

Vars.class_method   #=> 10, 15