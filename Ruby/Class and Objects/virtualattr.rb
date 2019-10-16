class Car
	def initialize
		@autopilot = Struct.new(:type).new(nil)
	end
	
	def type
		@autopilot.type
	end
	def type=(new_type)
		@autopilot.type = new_type
	end
end
lb = Car.new
lb.type = "sport"
puts lb.type