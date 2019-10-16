class Some
	def initialize
		method1
		method2
		self.method3
	end
	private
	def method1
		puts "private method1 called"
	end
	public
	def method2
		puts "public method2 called" 
	end
	protected
	def method3
		puts "protected method3 called"
	end       
end
some = Some.new
# puts method1 error
puts some.method2
