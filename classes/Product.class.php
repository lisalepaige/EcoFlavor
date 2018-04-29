public static function searchPosts($search){
                        $conn = Db::getInstance();
                        $stm = $conn->prepare("SELECT * FROM posts, tags WHERE tags.post_id = posts.post_id");
                        
                        $stm->execute();
                        $posts = $stm->fetchAll(PDO::FETCH_ASSOC);

                        $foundPosts = [];
                        foreach($posts as $p){
                                if(strpos(strtolower($p['post_desc']), strtolower($search)) !== false || strpos(strtolower($p['tag_name']), strtolower($search)) !== false){
                                    $foundPosts[] = $p;
                                }

                                
                        }

                        return $foundPosts;
                }