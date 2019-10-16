class Person
	def initialize name
		@name = name
	end
	def get_name
		@name
	end
end
per = Person.new "Tuanda"
puts per.get_name # Tuanda
puts per.send :get_name # Tuanda
class Circle
	@@PI = 3.141592
	
	def initialize
		@radius = 0
	end
	
	def set_radius radius
		@radius = radius
	end
	
	def area
		@radius * @radius * @@PI
	end
end
c = Circle.new
c.set_radius 5
puts c.area # 78.5398
