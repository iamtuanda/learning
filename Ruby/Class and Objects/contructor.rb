class Being
    #biến class 
    @@is = true
    
    #biến instance
    def initialize nm 
        # phương thức khởi tạo
        @name = nm
        puts "hihihi #{@name}"
    end
     
    def to_s
        "This is #{@name}"
    end   
     
    def does_exist?
        @@is
    end
end
 
b1 = Being.new "Being 1" # khởi tạo đối tượng
b2 = Being.new "Being 2"
b3 = Being.new "Being 3"
 
puts b1, b2, b3
 
p b1.does_exist?
p b2.does_exist?
p b3.does_exist?