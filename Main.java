public class Main {
    public static void main(String[] args) {
        BookManager manager = new BookManager();
        try {
            manager.addBook("Java Basics", "John Smith", "Pearson", 2021, "978-1234567890", 5);
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}

