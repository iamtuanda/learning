p = Proc.new{|x| puts x * 2}
[1,2,3].each(&p) # 1 2 3
p = Proc.new do
	puts "Hello"
end
p.call #hello
def square(a,p)
	a.each do |x|
		p.call x*x
	end
end
p = Proc.new {|x| puts x}
square([1,2,3],p) # 1 4 9
times_two = ->(x) {puts x * 2}
times_two.call(10)
times_two.(20)
times_two[20]
proc = Proc.new do |x, y|
	puts "I don't care about arguments!"
	puts x.inspect
	puts y.inspect
end
proc.call
lam = lambda {|a,b|puts a + b}
lam.call(1,2)
lam.call()