(0..5).each do |n|
	puts "Number #{n}"
end


[1,2,3].each{ |n| puts "Number #{n}"}


def test
	yield 1
	puts "You are in method"
	yield 5
	puts "you are again back to the method"
	yield 10
end


test {|i| puts "You are in the block #{i}"}
def test(&block)
	puts block
	block.call
end

test { puts "Hello World!"}


def my_method
	value = yield
	puts "value is: #{value}"
end
my_method do
	3
end

class Car
	attr_accessor :color, :doors
	def initialize
		yield(self)
	end
end

car = Car.new do |c|
	c.color = "Green"
	c.doors = 4
end


puts "My car's color is #{car.color} and it's got #{car.doors} doors."
BEGIN { 
	# BEGIN block code 
	puts "BEGIN code block"
} 
END { 
	# END block code 
	puts "END code block"
}
# MAIN block code 
puts "MAIN code block"