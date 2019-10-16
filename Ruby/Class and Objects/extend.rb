class Being
	def initialize
		puts "Being class created"
	end
end
class Human < Being
	def initialize
		super
		puts "Human class created"
	end
end
Being.new # Being class created
Human.new # Being class created, Human class created
