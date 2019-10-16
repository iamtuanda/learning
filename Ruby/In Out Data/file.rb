puts File.exists? 'output.txt'
file = File.open('output.txt', 'w+')
file.puts "The Programming tutorial"
file.write "Ruby\n"
file << "Php\n"

puts file.mtime
puts file.size
File.readlines(file).each do |line|
	puts line

end

file = File.open("output.txt")

while line = file.gets do
	puts line

end

File.rename 'output.txt', 'programming.txt'

$stdout = File.open "output.log", "a"
puts "Ruby"
puts "Php"

$stdout.close
$stdout = STDOUT

puts "Javascript"
