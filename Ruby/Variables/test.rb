class Circle
	def initialize x
		@r = x
	end
	def self.info
		"This is a Circle class"
	end
	def area
		@r * @r * 3.141592
	end
end
p Circle.info # This is a Circle class
c = Circle.new 3
p c.area # 28.274328
puts "hihaiaihcaic"
