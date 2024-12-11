using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class keyInHole : MonoBehaviour
{
    public firstDoor FD;
    public GameObject Key;
    public gameControlScript gc;

    // Start is called before the first frame update
    void Start()
    {
        Key.SetActive(false);
    }

    // Update is called once per frame
    void Update()
    {
        
    }

    void OnTriggerEnter(Collider other)
    {
        if (other.CompareTag("key1") == true)
        {
            Key.SetActive(true);
            gc.PlayOpenSound();
            
        }
        else
        {
            Key.SetActive(false);
            gc.PlayLockSound();
           
        }
    }

}
