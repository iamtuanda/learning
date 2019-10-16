module MyFirstModule
	def self.say_hello
		puts "aaaaaaaaaaaa"
	end
end
# in ra aaaaaaaaa
MyFirstModule.say_hello

module MyFirstModule1
	def say_hello
		puts "hihihihihhiihi"
	end
end
class Hello
	include MyFirstModule1
end
Hello.new.say_hello


module MyFirstModule2
	def say_hello
		puts "Hello, My name's tuanda"
	end
end
class A 
	include MyFirstModule2
end
class B 
	extend MyFirstModule2
end
A.new.say_hello
B.say_hello
